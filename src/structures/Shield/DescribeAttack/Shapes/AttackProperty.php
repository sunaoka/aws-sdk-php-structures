<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeAttack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NETWORK'|'APPLICATION'|null $AttackLayer
 * @property 'DESTINATION_URL'|'REFERRER'|'SOURCE_ASN'|'SOURCE_COUNTRY'|'SOURCE_IP_ADDRESS'|'SOURCE_USER_AGENT'|'WORDPRESS_PINGBACK_REFLECTOR'|'WORDPRESS_PINGBACK_SOURCE'|null $AttackPropertyIdentifier
 * @property list<Contributor>|null $TopContributors
 * @property 'BITS'|'BYTES'|'PACKETS'|'REQUESTS'|null $Unit
 * @property int|null $Total
 */
class AttackProperty extends Shape
{
    /**
     * @param array{
     *     AttackLayer?: 'NETWORK'|'APPLICATION'|null,
     *     AttackPropertyIdentifier?: 'DESTINATION_URL'|'REFERRER'|'SOURCE_ASN'|'SOURCE_COUNTRY'|'SOURCE_IP_ADDRESS'|'SOURCE_USER_AGENT'|'WORDPRESS_PINGBACK_REFLECTOR'|'WORDPRESS_PINGBACK_SOURCE'|null,
     *     TopContributors?: list<Contributor>|null,
     *     Unit?: 'BITS'|'BYTES'|'PACKETS'|'REQUESTS'|null,
     *     Total?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
