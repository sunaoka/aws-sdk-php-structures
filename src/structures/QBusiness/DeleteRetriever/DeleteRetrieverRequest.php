<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteRetriever;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $retrieverId
 */
class DeleteRetrieverRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     retrieverId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
