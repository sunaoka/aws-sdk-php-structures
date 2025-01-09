<?php

namespace Sunaoka\Aws\Structures\Iot\GetJobDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property bool $beforeSubstitution
 */
class GetJobDocumentRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     beforeSubstitution?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
