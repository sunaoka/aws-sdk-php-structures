<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\CreateSessionLogger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EventFilter $eventFilter
 * @property Shapes\LogConfiguration $logConfiguration
 * @property string|null $displayName
 * @property string|null $customerManagedKey
 * @property array<string, string>|null $additionalEncryptionContext
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 */
class CreateSessionLoggerRequest extends Request
{
    /**
     * @param array{
     *     eventFilter: Shapes\EventFilter,
     *     logConfiguration: Shapes\LogConfiguration,
     *     displayName?: string|null,
     *     customerManagedKey?: string|null,
     *     additionalEncryptionContext?: array<string, string>|null,
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
