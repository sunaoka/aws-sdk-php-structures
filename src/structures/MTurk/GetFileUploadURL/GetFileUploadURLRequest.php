<?php

namespace Sunaoka\Aws\Structures\MTurk\GetFileUploadURL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssignmentId
 * @property string $QuestionIdentifier
 */
class GetFileUploadURLRequest extends Request
{
    /**
     * @param array{
     *     AssignmentId: string,
     *     QuestionIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
