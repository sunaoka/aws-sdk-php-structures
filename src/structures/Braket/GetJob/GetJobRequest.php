<?php

namespace Sunaoka\Aws\Structures\Braket\GetJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobArn
 * @property list<'QueueInfo'>|null $additionalAttributeNames
 */
class GetJobRequest extends Request
{
    /**
     * @param array{
     *     jobArn: string,
     *     additionalAttributeNames?: list<'QueueInfo'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
