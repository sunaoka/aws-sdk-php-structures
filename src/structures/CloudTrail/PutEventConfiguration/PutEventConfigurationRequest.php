<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutEventConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EventDataStore
 * @property 'Standard'|'Large' $MaxEventSize
 * @property list<Shapes\ContextKeySelector> $ContextKeySelectors
 */
class PutEventConfigurationRequest extends Request
{
    /**
     * @param array{
     *     EventDataStore?: string|null,
     *     MaxEventSize: 'Standard'|'Large',
     *     ContextKeySelectors: list<Shapes\ContextKeySelector>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
