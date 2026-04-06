<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListComponentBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $version
 * @property 'Windows'|'Linux'|'macOS'|null $platform
 * @property list<string>|null $supportedOsVersions
 * @property ComponentState|null $state
 * @property 'BUILD'|'TEST'|null $type
 * @property string|null $owner
 * @property string|null $description
 * @property string|null $changeDescription
 * @property string|null $dateCreated
 * @property array<string, string>|null $tags
 * @property string|null $publisher
 * @property bool|null $obfuscate
 */
class ComponentSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     version?: string|null,
     *     platform?: 'Windows'|'Linux'|'macOS'|null,
     *     supportedOsVersions?: list<string>|null,
     *     state?: ComponentState|null,
     *     type?: 'BUILD'|'TEST'|null,
     *     owner?: string|null,
     *     description?: string|null,
     *     changeDescription?: string|null,
     *     dateCreated?: string|null,
     *     tags?: array<string, string>|null,
     *     publisher?: string|null,
     *     obfuscate?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
