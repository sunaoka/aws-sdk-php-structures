<?php

namespace Sunaoka\Aws\Structures\Braket\CreateQuantumTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $action
 * @property list<Shapes\Association> $associations
 * @property string $clientToken
 * @property string $deviceArn
 * @property string $deviceParameters
 * @property string $jobToken
 * @property string $outputS3Bucket
 * @property string $outputS3KeyPrefix
 * @property int $shots
 * @property array<string, string> $tags
 */
class CreateQuantumTaskRequest extends Request
{
    /**
     * @param array{
     *     action: string,
     *     associations?: list<Shapes\Association>,
     *     clientToken: string,
     *     deviceArn: string,
     *     deviceParameters?: string,
     *     jobToken?: string,
     *     outputS3Bucket: string,
     *     outputS3KeyPrefix: string,
     *     shots: int,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
