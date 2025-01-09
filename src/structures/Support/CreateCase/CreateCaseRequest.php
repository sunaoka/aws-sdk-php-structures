<?php

namespace Sunaoka\Aws\Structures\Support\CreateCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $subject
 * @property string $serviceCode
 * @property string $severityCode
 * @property string $categoryCode
 * @property string $communicationBody
 * @property list<string> $ccEmailAddresses
 * @property string $language
 * @property string $issueType
 * @property string $attachmentSetId
 */
class CreateCaseRequest extends Request
{
    /**
     * @param array{
     *     subject: string,
     *     serviceCode?: string,
     *     severityCode?: string,
     *     categoryCode?: string,
     *     communicationBody: string,
     *     ccEmailAddresses?: list<string>,
     *     language?: string,
     *     issueType?: string,
     *     attachmentSetId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
