<?php

namespace Sunaoka\Aws\Structures\Textract\StartDocumentAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DocumentLocation $DocumentLocation
 * @property list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'> $FeatureTypes
 * @property string|null $ClientRequestToken
 * @property string|null $JobTag
 * @property Shapes\NotificationChannel|null $NotificationChannel
 * @property Shapes\OutputConfig|null $OutputConfig
 * @property string|null $KMSKeyId
 * @property Shapes\QueriesConfig|null $QueriesConfig
 */
class StartDocumentAnalysisRequest extends Request
{
    /**
     * @param array{
     *     DocumentLocation: Shapes\DocumentLocation,
     *     FeatureTypes: list<'TABLES'|'FORMS'|'QUERIES'|'SIGNATURES'>,
     *     ClientRequestToken?: string|null,
     *     JobTag?: string|null,
     *     NotificationChannel?: Shapes\NotificationChannel|null,
     *     OutputConfig?: Shapes\OutputConfig|null,
     *     KMSKeyId?: string|null,
     *     QueriesConfig?: Shapes\QueriesConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
