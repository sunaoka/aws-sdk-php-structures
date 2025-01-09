<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateDomainName\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainName
 * @property string $description
 * @property string $certificateArn
 * @property string $appsyncDomainName
 * @property string $hostedZoneId
 */
class DomainNameConfig extends Shape
{
    /**
     * @param array{
     *     domainName?: string,
     *     description?: string,
     *     certificateArn?: string,
     *     appsyncDomainName?: string,
     *     hostedZoneId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
