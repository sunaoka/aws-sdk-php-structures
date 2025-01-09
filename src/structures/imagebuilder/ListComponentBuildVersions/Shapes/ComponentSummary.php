<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListComponentBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $version
 * @property 'Windows'|'Linux'|'macOS' $platform
 * @property list<string> $supportedOsVersions
 * @property ComponentState $state
 * @property 'BUILD'|'TEST' $type
 * @property string $owner
 * @property string $description
 * @property string $changeDescription
 * @property string $dateCreated
 * @property array<string, string> $tags
 * @property string $publisher
 * @property bool $obfuscate
 */
class ComponentSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     version?: string,
     *     platform?: 'Windows'|'Linux'|'macOS',
     *     supportedOsVersions?: list<string>,
     *     state?: ComponentState,
     *     type?: 'BUILD'|'TEST',
     *     owner?: string,
     *     description?: string,
     *     changeDescription?: string,
     *     dateCreated?: string,
     *     tags?: array<string, string>,
     *     publisher?: string,
     *     obfuscate?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
