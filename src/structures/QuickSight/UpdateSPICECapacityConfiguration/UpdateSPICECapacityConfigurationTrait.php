<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateSPICECapacityConfiguration;

trait UpdateSPICECapacityConfigurationTrait
{
    /**
     * @param UpdateSPICECapacityConfigurationRequest $args
     * @return UpdateSPICECapacityConfigurationResponse
     */
    public function updateSPICECapacityConfiguration(UpdateSPICECapacityConfigurationRequest $args)
    {
        $result = parent::updateSPICECapacityConfiguration($args->toArray());
        return new UpdateSPICECapacityConfigurationResponse($result->toArray());
    }
}
