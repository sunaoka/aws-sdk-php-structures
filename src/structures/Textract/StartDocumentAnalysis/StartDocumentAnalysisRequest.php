<?php

namespace Sunaoka\Aws\Structures\Textract\StartDocumentAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DocumentLocation $DocumentLocation
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'> $FeatureTypes
 * @property string $ClientRequestToken
 * @property string $JobTag
 * @property Shapes\NotificationChannel $NotificationChannel
 * @property Shapes\OutputConfig $OutputConfig
 * @property string $KMSKeyId
 * @property Shapes\QueriesConfig $QueriesConfig
 * @property Shapes\AdaptersConfig $AdaptersConfig
 */
class StartDocumentAnalysisRequest extends Request
{
    /**
     * @param array{
     *     DocumentLocation: Shapes\DocumentLocation,
     *     FeatureTypes: list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>,
     *     ClientRequestToken?: string,
     *     JobTag?: string,
     *     NotificationChannel?: Shapes\NotificationChannel,
     *     OutputConfig?: Shapes\OutputConfig,
     *     KMSKeyId?: string,
     *     QueriesConfig?: Shapes\QueriesConfig,
     *     AdaptersConfig?: Shapes\AdaptersConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
