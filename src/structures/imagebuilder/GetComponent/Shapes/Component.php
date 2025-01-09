<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $version
 * @property string $description
 * @property string $changeDescription
 * @property 'BUILD'|'TEST' $type
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property list<string> $supportedOsVersions
 * @property ComponentState $state
 * @property list<ComponentParameterDetail> $parameters
 * @property string $owner
 * @property string $data
 * @property string $kmsKeyId
 * @property bool $encrypted
 * @property string $dateCreated
 * @property array<string, string> $tags
 * @property string $publisher
 * @property bool $obfuscate
 * @property list<ProductCodeListItem> $productCodes
 */
class Component extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     version?: string,
     *     description?: string,
     *     changeDescription?: string,
     *     type?: 'BUILD'|'TEST',
     *     platform?: 'Windows'|'Linux'|'macOS',
     *     supportedOsVersions?: list<string>,
     *     state?: ComponentState,
     *     parameters?: list<ComponentParameterDetail>,
     *     owner?: string,
     *     data?: string,
     *     kmsKeyId?: string,
     *     encrypted?: bool,
     *     dateCreated?: string,
     *     tags?: array<string, string>,
     *     publisher?: string,
     *     obfuscate?: bool,
     *     productCodes?: list<ProductCodeListItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
