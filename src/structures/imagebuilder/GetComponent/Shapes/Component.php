<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $version
 * @property string|null $description
 * @property string|null $changeDescription
 * @property 'BUILD'|'TEST'|null $type
 * @property 'Windows'|'Linux'|'macOS'|null $platform
 * @property list<string>|null $supportedOsVersions
 * @property ComponentState|null $state
 * @property list<ComponentParameterDetail>|null $parameters
 * @property string|null $owner
 * @property string|null $data
 * @property string|null $kmsKeyId
 * @property bool|null $encrypted
 * @property string|null $dateCreated
 * @property array<string, string>|null $tags
 * @property string|null $publisher
 * @property bool|null $obfuscate
 * @property list<ProductCodeListItem>|null $productCodes
 */
class Component extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     version?: string|null,
     *     description?: string|null,
     *     changeDescription?: string|null,
     *     type?: 'BUILD'|'TEST'|null,
     *     platform?: 'Windows'|'Linux'|'macOS'|null,
     *     supportedOsVersions?: list<string>|null,
     *     state?: ComponentState|null,
     *     parameters?: list<ComponentParameterDetail>|null,
     *     owner?: string|null,
     *     data?: string|null,
     *     kmsKeyId?: string|null,
     *     encrypted?: bool|null,
     *     dateCreated?: string|null,
     *     tags?: array<string, string>|null,
     *     publisher?: string|null,
     *     obfuscate?: bool|null,
     *     productCodes?: list<ProductCodeListItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
