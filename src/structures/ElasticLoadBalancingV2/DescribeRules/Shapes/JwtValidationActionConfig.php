<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JwksEndpoint
 * @property string $Issuer
 * @property list<JwtValidationActionAdditionalClaim>|null $AdditionalClaims
 */
class JwtValidationActionConfig extends Shape
{
    /**
     * @param array{
     *     JwksEndpoint: string,
     *     Issuer: string,
     *     AdditionalClaims?: list<JwtValidationActionAdditionalClaim>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
