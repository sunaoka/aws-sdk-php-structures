<?php

namespace Sunaoka\Aws\Structures\Efs\PutAccountPreferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'LONG_ID'|'SHORT_ID' $ResourceIdType
 */
class PutAccountPreferencesRequest extends Request
{
    /**
     * @param array{ResourceIdType: 'LONG_ID'|'SHORT_ID'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
