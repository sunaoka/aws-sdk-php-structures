<?php

namespace Sunaoka\Aws\Structures\Artifact\CreateComplianceInquiry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\InquiryContent $inquiryContent
 * @property string|null $clientToken
 * @property 'AI_ONLY'|null $supportMode
 * @property array<string, string>|null $tags
 */
class CreateComplianceInquiryRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     inquiryContent: Shapes\InquiryContent,
     *     clientToken?: string|null,
     *     supportMode?: 'AI_ONLY'|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
