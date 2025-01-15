<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $version
 * @property string|null $description
 * @property 'Windows'|'Linux'|'macOS'|null $platform
 * @property list<string>|null $supportedOsVersions
 * @property 'BUILD'|'TEST'|null $type
 * @property string|null $owner
 * @property string|null $dateCreated
 * @property 'DEPRECATED'|'DISABLED'|'ACTIVE'|null $status
 * @property list<ProductCodeListItem>|null $productCodes
 */
class ComponentVersion extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     version?: string|null,
     *     description?: string|null,
     *     platform?: 'Windows'|'Linux'|'macOS'|null,
     *     supportedOsVersions?: list<string>|null,
     *     type?: 'BUILD'|'TEST'|null,
     *     owner?: string|null,
     *     dateCreated?: string|null,
     *     status?: 'DEPRECATED'|'DISABLED'|'ACTIVE'|null,
     *     productCodes?: list<ProductCodeListItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
