<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetDefaultRetentionPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INBOX'|'DELETED_ITEMS'|'SENT_ITEMS'|'DRAFTS'|'JUNK_EMAIL' $Name
 * @property 'NONE'|'DELETE'|'PERMANENTLY_DELETE' $Action
 * @property int<1, 730>|null $Period
 */
class FolderConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: 'INBOX'|'DELETED_ITEMS'|'SENT_ITEMS'|'DRAFTS'|'JUNK_EMAIL',
     *     Action: 'NONE'|'DELETE'|'PERMANENTLY_DELETE',
     *     Period?: int<1, 730>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
