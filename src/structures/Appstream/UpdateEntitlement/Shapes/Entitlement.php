<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateEntitlement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $StackName
 * @property string|null $Description
 * @property 'ALL'|'ASSOCIATED' $AppVisibility
 * @property list<EntitlementAttribute> $Attributes
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class Entitlement extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     StackName: string,
     *     Description?: string|null,
     *     AppVisibility: 'ALL'|'ASSOCIATED',
     *     Attributes: list<EntitlementAttribute>,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
