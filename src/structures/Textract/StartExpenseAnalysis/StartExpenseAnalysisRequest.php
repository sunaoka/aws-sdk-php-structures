<?php

namespace Sunaoka\Aws\Structures\Textract\StartExpenseAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DocumentLocation $DocumentLocation
 * @property string|null $ClientRequestToken
 * @property string|null $JobTag
 * @property Shapes\NotificationChannel|null $NotificationChannel
 * @property Shapes\OutputConfig|null $OutputConfig
 * @property string|null $KMSKeyId
 */
class StartExpenseAnalysisRequest extends Request
{
    /**
     * @param array{
     *     DocumentLocation: Shapes\DocumentLocation,
     *     ClientRequestToken?: string|null,
     *     JobTag?: string|null,
     *     NotificationChannel?: Shapes\NotificationChannel|null,
     *     OutputConfig?: Shapes\OutputConfig|null,
     *     KMSKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
