<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'subject-cn'|'subject-ou'|'san-dns'|'san-uri' $Field
 * @property 'accept' $Action
 * @property 'exact'|'prefix' $MatchType
 * @property string $Value
 */
class ClientCertificateIdentityFilter extends Shape
{
    /**
     * @param array{
     *     Field: 'subject-cn'|'subject-ou'|'san-dns'|'san-uri',
     *     Action: 'accept',
     *     MatchType: 'exact'|'prefix',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
