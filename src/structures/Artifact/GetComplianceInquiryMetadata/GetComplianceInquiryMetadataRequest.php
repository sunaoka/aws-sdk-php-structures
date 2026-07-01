<?php

namespace Sunaoka\Aws\Structures\Artifact\GetComplianceInquiryMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $complianceInquiryId
 */
class GetComplianceInquiryMetadataRequest extends Request
{
    /**
     * @param array{complianceInquiryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
