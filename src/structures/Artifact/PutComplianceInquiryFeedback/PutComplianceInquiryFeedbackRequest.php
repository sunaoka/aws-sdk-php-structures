<?php

namespace Sunaoka\Aws\Structures\Artifact\PutComplianceInquiryFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $complianceInquiryId
 * @property int|null $queryIdentifier
 * @property 'THUMBS_UP'|'THUMBS_DOWN' $rating
 * @property int|null $responseRevisionId
 * @property list<'OTHER'|'PARTIAL_RESPONSE'|'IRRELEVANT_RESPONSE'>|null $reasonCodes
 * @property string|null $comment
 * @property string|null $clientToken
 */
class PutComplianceInquiryFeedbackRequest extends Request
{
    /**
     * @param array{
     *     complianceInquiryId: string,
     *     queryIdentifier?: int|null,
     *     rating: 'THUMBS_UP'|'THUMBS_DOWN',
     *     responseRevisionId?: int|null,
     *     reasonCodes?: list<'OTHER'|'PARTIAL_RESPONSE'|'IRRELEVANT_RESPONSE'>|null,
     *     comment?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
