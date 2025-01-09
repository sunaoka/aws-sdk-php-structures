<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetCelebrityInfo;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetCelebrityInfoRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
