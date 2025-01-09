<?php

namespace Sunaoka\Aws\Structures\Sms\GenerateChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property 'JSON'|'YAML' $changesetFormat
 */
class GenerateChangeSetRequest extends Request
{
    /**
     * @param array{
     *     appId?: string,
     *     changesetFormat?: 'JSON'|'YAML'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
