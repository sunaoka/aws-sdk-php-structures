<?php

namespace Sunaoka\Aws\Structures\MTurk\GetQualificationScore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationTypeId
 * @property string $WorkerId
 */
class GetQualificationScoreRequest extends Request
{
    /**
     * @param array{
     *     QualificationTypeId: string,
     *     WorkerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
