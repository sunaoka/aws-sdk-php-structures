<?php

namespace Sunaoka\Aws\Structures\Textract\StartLendingAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DocumentLocation $DocumentLocation
 * @property string $ClientRequestToken
 * @property string $JobTag
 * @property Shapes\NotificationChannel $NotificationChannel
 * @property Shapes\OutputConfig $OutputConfig
 * @property string $KMSKeyId
 */
class StartLendingAnalysisRequest extends Request
{
    /**
     * @param array{
     *     DocumentLocation: Shapes\DocumentLocation,
     *     ClientRequestToken?: string,
     *     JobTag?: string,
     *     NotificationChannel?: Shapes\NotificationChannel,
     *     OutputConfig?: Shapes\OutputConfig,
     *     KMSKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
