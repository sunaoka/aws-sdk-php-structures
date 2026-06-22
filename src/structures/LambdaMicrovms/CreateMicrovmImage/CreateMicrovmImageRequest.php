<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\CreateMicrovmImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $baseImageArn
 * @property string|null $baseImageVersion
 * @property string $buildRoleArn
 * @property string|null $description
 * @property Shapes\CodeArtifact $codeArtifact
 * @property Shapes\Logging|null $logging
 * @property list<string>|null $egressNetworkConnectors
 * @property list<Shapes\CpuConfiguration>|null $cpuConfigurations
 * @property list<Shapes\Resources>|null $resources
 * @property list<'ALL'>|null $additionalOsCapabilities
 * @property Shapes\Hooks|null $hooks
 * @property array<string, string>|null $environmentVariables
 * @property string $name
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateMicrovmImageRequest extends Request
{
    /**
     * @param array{
     *     baseImageArn: string,
     *     baseImageVersion?: string|null,
     *     buildRoleArn: string,
     *     description?: string|null,
     *     codeArtifact: Shapes\CodeArtifact,
     *     logging?: Shapes\Logging|null,
     *     egressNetworkConnectors?: list<string>|null,
     *     cpuConfigurations?: list<Shapes\CpuConfiguration>|null,
     *     resources?: list<Shapes\Resources>|null,
     *     additionalOsCapabilities?: list<'ALL'>|null,
     *     hooks?: Shapes\Hooks|null,
     *     environmentVariables?: array<string, string>|null,
     *     name: string,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
