<?php

namespace Sunaoka\Aws\Structures\Organizations\EnablePolicyType;

trait EnablePolicyTypeTrait
{
    /**
     * @param EnablePolicyTypeRequest $args
     * @return EnablePolicyTypeResponse
     */
    public function enablePolicyType(EnablePolicyTypeRequest $args)
    {
        $result = parent::enablePolicyType($args->toArray());
        return new EnablePolicyTypeResponse($result->toArray());
    }
}
