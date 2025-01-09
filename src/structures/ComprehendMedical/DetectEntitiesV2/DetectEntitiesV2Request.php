<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DetectEntitiesV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Text
 */
class DetectEntitiesV2Request extends Request
{
    /**
     * @param array{Text: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
