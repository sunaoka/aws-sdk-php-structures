<?php

namespace Sunaoka\Aws\Structures\Artifact\ExportComplianceInquiry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $complianceInquiryId
 * @property list<int>|null $queryIdentifiers
 * @property bool|null $includeCitations
 */
class ExportComplianceInquiryRequest extends Request
{
    /**
     * @param array{
     *     complianceInquiryId: string,
     *     queryIdentifiers?: list<int>|null,
     *     includeCitations?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
