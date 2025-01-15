<?php

namespace Sunaoka\Aws\Structures\SSMContacts\AcceptPage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PageId
 * @property string|null $ContactChannelId
 * @property 'DELIVERED'|'READ' $AcceptType
 * @property string|null $Note
 * @property string $AcceptCode
 * @property 'IGNORE'|'ENFORCE'|null $AcceptCodeValidation
 */
class AcceptPageRequest extends Request
{
    /**
     * @param array{
     *     PageId: string,
     *     ContactChannelId?: string|null,
     *     AcceptType: 'DELIVERED'|'READ',
     *     Note?: string|null,
     *     AcceptCode: string,
     *     AcceptCodeValidation?: 'IGNORE'|'ENFORCE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
