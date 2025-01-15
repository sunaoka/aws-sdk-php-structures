<?php

namespace Sunaoka\Aws\Structures\Textract\StartDocumentAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DocumentLocation $DocumentLocation
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'> $FeatureTypes
 * @property string|null $ClientRequestToken
 * @property string|null $JobTag
 * @property Shapes\NotificationChannel|null $NotificationChannel
 * @property Shapes\OutputConfig|null $OutputConfig
 * @property string|null $KMSKeyId
 * @property Shapes\QueriesConfig|null $QueriesConfig
 * @property Shapes\AdaptersConfig|null $AdaptersConfig
 */
class StartDocumentAnalysisRequest extends Request
{
    /**
     * @param array{
     *     DocumentLocation: Shapes\DocumentLocation,
     *     FeatureTypes: list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'|'LAYOUT'>,
     *     ClientRequestToken?: string|null,
     *     JobTag?: string|null,
     *     NotificationChannel?: Shapes\NotificationChannel|null,
     *     OutputConfig?: Shapes\OutputConfig|null,
     *     KMSKeyId?: string|null,
     *     QueriesConfig?: Shapes\QueriesConfig|null,
     *     AdaptersConfig?: Shapes\AdaptersConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
