<?php

namespace Sunaoka\Aws\Structures\Support\CreateCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $subject
 * @property string|null $serviceCode
 * @property string|null $severityCode
 * @property string|null $categoryCode
 * @property string $communicationBody
 * @property list<string>|null $ccEmailAddresses
 * @property string|null $language
 * @property string|null $issueType
 * @property string|null $attachmentSetId
 */
class CreateCaseRequest extends Request
{
    /**
     * @param array{
     *     subject: string,
     *     serviceCode?: string|null,
     *     severityCode?: string|null,
     *     categoryCode?: string|null,
     *     communicationBody: string,
     *     ccEmailAddresses?: list<string>|null,
     *     language?: string|null,
     *     issueType?: string|null,
     *     attachmentSetId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
