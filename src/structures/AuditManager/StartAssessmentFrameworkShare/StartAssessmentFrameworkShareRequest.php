<?php

namespace Sunaoka\Aws\Structures\AuditManager\StartAssessmentFrameworkShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $frameworkId
 * @property string $destinationAccount
 * @property string $destinationRegion
 * @property string $comment
 */
class StartAssessmentFrameworkShareRequest extends Request
{
    /**
     * @param array{
     *     frameworkId: string,
     *     destinationAccount: string,
     *     destinationRegion: string,
     *     comment?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
