<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateBatchSegmentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $solutionVersionArn
 * @property string $filterArn
 * @property int $numResults
 * @property Shapes\BatchSegmentJobInput $jobInput
 * @property Shapes\BatchSegmentJobOutput $jobOutput
 * @property string $roleArn
 * @property list<Shapes\Tag> $tags
 */
class CreateBatchSegmentJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     solutionVersionArn: string,
     *     filterArn?: string,
     *     numResults?: int,
     *     jobInput: Shapes\BatchSegmentJobInput,
     *     jobOutput: Shapes\BatchSegmentJobOutput,
     *     roleArn: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
