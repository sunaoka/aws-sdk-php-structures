<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $version
 * @property string $description
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property list<string> $supportedOsVersions
 * @property 'BUILD'|'TEST' $type
 * @property string $owner
 * @property string $dateCreated
 * @property 'DEPRECATED'|'DISABLED'|'ACTIVE' $status
 * @property list<ProductCodeListItem> $productCodes
 */
class ComponentVersion extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     version?: string,
     *     description?: string,
     *     platform?: 'Windows'|'Linux'|'macOS',
     *     supportedOsVersions?: list<string>,
     *     type?: 'BUILD'|'TEST',
     *     owner?: string,
     *     dateCreated?: string,
     *     status?: 'DEPRECATED'|'DISABLED'|'ACTIVE',
     *     productCodes?: list<ProductCodeListItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
