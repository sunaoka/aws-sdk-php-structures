<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NETWORK'|'APPLICATION' $AttackLayer
 * @property 'DESTINATION_URL'|'REFERRER'|'SOURCE_ASN'|'SOURCE_COUNTRY'|'SOURCE_IP_ADDRESS'|'SOURCE_USER_AGENT'|'WORDPRESS_PINGBACK_REFLECTOR'|'WORDPRESS_PINGBACK_SOURCE' $AttackPropertyIdentifier
 * @property list<Contributor> $TopContributors
 * @property 'BITS'|'BYTES'|'PACKETS'|'REQUESTS' $Unit
 * @property int $Total
 */
class AttackProperty extends Shape
{
    /**
     * @param array{
     *     AttackLayer?: 'NETWORK'|'APPLICATION',
     *     AttackPropertyIdentifier?: 'DESTINATION_URL'|'REFERRER'|'SOURCE_ASN'|'SOURCE_COUNTRY'|'SOURCE_IP_ADDRESS'|'SOURCE_USER_AGENT'|'WORDPRESS_PINGBACK_REFLECTOR'|'WORDPRESS_PINGBACK_SOURCE',
     *     TopContributors?: list<Contributor>,
     *     Unit?: 'BITS'|'BYTES'|'PACKETS'|'REQUESTS',
     *     Total?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
