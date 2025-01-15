<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<string>|null $dataExtraDimensions
 * @property 'APPROVE'|'SUSPEND'|'RESUME'|'UPDATE' $action
 */
class UpdateCampaignRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     dataExtraDimensions?: list<string>|null,
     *     action: 'APPROVE'|'SUSPEND'|'RESUME'|'UPDATE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
