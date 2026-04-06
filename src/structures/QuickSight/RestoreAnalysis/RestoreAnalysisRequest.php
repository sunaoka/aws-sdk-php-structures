<?php

namespace Sunaoka\Aws\Structures\QuickSight\RestoreAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AnalysisId
 * @property bool|null $RestoreToFolders
 */
class RestoreAnalysisRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AnalysisId: string,
     *     RestoreToFolders?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
