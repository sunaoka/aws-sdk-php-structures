<?php

namespace Sunaoka\Aws\Structures\Sms\GenerateChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $appId
 * @property 'JSON'|'YAML'|null $changesetFormat
 */
class GenerateChangeSetRequest extends Request
{
    /**
     * @param array{
     *     appId?: string|null,
     *     changesetFormat?: 'JSON'|'YAML'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
