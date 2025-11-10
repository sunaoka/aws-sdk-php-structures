<?php

namespace Sunaoka\Aws\Structures\Braket\CreateQuantumTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $deviceArn
 * @property string|null $deviceParameters
 * @property int<0, max> $shots
 * @property string $outputS3Bucket
 * @property string $outputS3KeyPrefix
 * @property string $action
 * @property array<string, string>|null $tags
 * @property string|null $jobToken
 * @property list<Shapes\Association>|null $associations
 * @property Shapes\ExperimentalCapabilities|null $experimentalCapabilities
 */
class CreateQuantumTaskRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     deviceArn: string,
     *     deviceParameters?: string|null,
     *     shots: int<0, max>,
     *     outputS3Bucket: string,
     *     outputS3KeyPrefix: string,
     *     action: string,
     *     tags?: array<string, string>|null,
     *     jobToken?: string|null,
     *     associations?: list<Shapes\Association>|null,
     *     experimentalCapabilities?: Shapes\ExperimentalCapabilities|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
