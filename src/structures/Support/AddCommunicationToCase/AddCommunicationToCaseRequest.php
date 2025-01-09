<?php

namespace Sunaoka\Aws\Structures\Support\AddCommunicationToCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $communicationBody
 * @property list<string> $ccEmailAddresses
 * @property string $attachmentSetId
 */
class AddCommunicationToCaseRequest extends Request
{
    /**
     * @param array{
     *     caseId?: string,
     *     communicationBody: string,
     *     ccEmailAddresses?: list<string>,
     *     attachmentSetId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
