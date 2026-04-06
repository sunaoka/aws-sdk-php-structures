<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\PutDefaultApplicationSetting;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationArn
 * @property bool $setAsDefault
 */
class PutDefaultApplicationSettingRequest extends Request
{
    /**
     * @param array{
     *     applicationArn: string,
     *     setAsDefault: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
