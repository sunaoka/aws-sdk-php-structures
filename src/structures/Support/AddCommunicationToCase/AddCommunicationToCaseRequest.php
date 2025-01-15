<?php

namespace Sunaoka\Aws\Structures\Support\AddCommunicationToCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $caseId
 * @property string $communicationBody
 * @property list<string>|null $ccEmailAddresses
 * @property string|null $attachmentSetId
 */
class AddCommunicationToCaseRequest extends Request
{
    /**
     * @param array{
     *     caseId?: string|null,
     *     communicationBody: string,
     *     ccEmailAddresses?: list<string>|null,
     *     attachmentSetId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
