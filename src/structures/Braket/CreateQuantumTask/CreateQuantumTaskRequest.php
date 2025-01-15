<?php

namespace Sunaoka\Aws\Structures\Braket\CreateQuantumTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $action
 * @property list<Shapes\Association>|null $associations
 * @property string $clientToken
 * @property string $deviceArn
 * @property string|null $deviceParameters
 * @property string|null $jobToken
 * @property string $outputS3Bucket
 * @property string $outputS3KeyPrefix
 * @property int<0, max> $shots
 * @property array<string, string>|null $tags
 */
class CreateQuantumTaskRequest extends Request
{
    /**
     * @param array{
     *     action: string,
     *     associations?: list<Shapes\Association>|null,
     *     clientToken: string,
     *     deviceArn: string,
     *     deviceParameters?: string|null,
     *     jobToken?: string|null,
     *     outputS3Bucket: string,
     *     outputS3KeyPrefix: string,
     *     shots: int<0, max>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
