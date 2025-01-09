<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactReferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property list<'URL'|'ATTACHMENT'|'CONTACT_ANALYSIS'|'NUMBER'|'STRING'|'DATE'|'EMAIL'|'EMAIL_MESSAGE'> $ReferenceTypes
 * @property string $NextToken
 */
class ListContactReferencesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     ReferenceTypes: list<'URL'|'ATTACHMENT'|'CONTACT_ANALYSIS'|'NUMBER'|'STRING'|'DATE'|'EMAIL'|'EMAIL_MESSAGE'>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
