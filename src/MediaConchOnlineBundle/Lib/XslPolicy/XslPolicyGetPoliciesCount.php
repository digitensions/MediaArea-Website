<?php

namespace MediaConchOnlineBundle\Lib\XslPolicy;

class XslPolicyGetPoliciesCount extends XslPolicyBase
{
    public function getPoliciesCount()
    {
        $this->response = $this->mc->policyGetPoliciesCount($this->user->getId());
    }
}
