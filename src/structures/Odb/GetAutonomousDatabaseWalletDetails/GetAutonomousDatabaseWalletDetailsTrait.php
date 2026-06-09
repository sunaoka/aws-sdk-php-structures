<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabaseWalletDetails;

trait GetAutonomousDatabaseWalletDetailsTrait
{
    /**
     * @param GetAutonomousDatabaseWalletDetailsRequest $args
     * @return GetAutonomousDatabaseWalletDetailsResponse
     */
    public function getAutonomousDatabaseWalletDetails(GetAutonomousDatabaseWalletDetailsRequest $args)
    {
        $result = parent::getAutonomousDatabaseWalletDetails($args->toArray());
        return new GetAutonomousDatabaseWalletDetailsResponse($result->toArray());
    }
}
