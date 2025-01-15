<?php

namespace Sunaoka\Aws\Structures\Iot\GetJobDocument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property bool|null $beforeSubstitution
 */
class GetJobDocumentRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     beforeSubstitution?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
