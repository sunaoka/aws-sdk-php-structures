<?php

namespace Sunaoka\Aws\Structures\SSMContacts\AcceptPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PageId
 * @property string $ContactChannelId
 * @property 'DELIVERED'|'READ' $AcceptType
 * @property string $Note
 * @property string $AcceptCode
 * @property 'IGNORE'|'ENFORCE' $AcceptCodeValidation
 */
class AcceptPageRequest extends Request
{
    /**
     * @param array{
     *     PageId: string,
     *     ContactChannelId?: string,
     *     AcceptType: 'DELIVERED'|'READ',
     *     Note?: string,
     *     AcceptCode: string,
     *     AcceptCodeValidation?: 'IGNORE'|'ENFORCE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
