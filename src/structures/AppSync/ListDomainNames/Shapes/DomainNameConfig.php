<?php

namespace Sunaoka\Aws\Structures\AppSync\ListDomainNames\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainName
 * @property string|null $description
 * @property string|null $certificateArn
 * @property string|null $appsyncDomainName
 * @property string|null $hostedZoneId
 */
class DomainNameConfig extends Shape
{
    /**
     * @param array{
     *     domainName?: string|null,
     *     description?: string|null,
     *     certificateArn?: string|null,
     *     appsyncDomainName?: string|null,
     *     hostedZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
