<?php

namespace MediaConchOnlineBundle\Lib\XslPolicy;

class XslPolicyGetPublicPolicies extends XslPolicyBase
{
    public function getPublicPolicies()
    {
        $this->response = $this->mc->policyGetPublicPolicies();
    }
}
