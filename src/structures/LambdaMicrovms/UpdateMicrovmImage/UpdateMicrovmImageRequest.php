<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\UpdateMicrovmImage;

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
 * @property string $imageIdentifier
 * @property string|null $clientToken
 */
class UpdateMicrovmImageRequest extends Request
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
     *     imageIdentifier: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
