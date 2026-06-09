<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabaseWallet;

trait CreateAutonomousDatabaseWalletTrait
{
    /**
     * @param CreateAutonomousDatabaseWalletRequest $args
     * @return CreateAutonomousDatabaseWalletResponse
     */
    public function createAutonomousDatabaseWallet(CreateAutonomousDatabaseWalletRequest $args)
    {
        $result = parent::createAutonomousDatabaseWallet($args->toArray());
        return new CreateAutonomousDatabaseWalletResponse($result->toArray());
    }
}
