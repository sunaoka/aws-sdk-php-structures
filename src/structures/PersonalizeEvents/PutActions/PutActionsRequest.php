<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetArn
 * @property list<Shapes\Action> $actions
 */
class PutActionsRequest extends Request
{
    /**
     * @param array{
     *     datasetArn: string,
     *     actions: list<Shapes\Action>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
