<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckAccessNotGranted;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyDocument
 * @property list<Shapes\Access> $access
 * @property 'IDENTITY_POLICY'|'RESOURCE_POLICY' $policyType
 */
class CheckAccessNotGrantedRequest extends Request
{
    /**
     * @param array{
     *     policyDocument: string,
     *     access: list<Shapes\Access>,
     *     policyType: 'IDENTITY_POLICY'|'RESOURCE_POLICY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
