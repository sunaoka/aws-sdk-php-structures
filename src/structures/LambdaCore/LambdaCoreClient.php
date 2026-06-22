<?php

namespace Sunaoka\Aws\Structures\LambdaCore;

class LambdaCoreClient extends \Aws\LambdaCore\LambdaCoreClient
{
    use CreateNetworkConnector\CreateNetworkConnectorTrait;
    use DeleteNetworkConnector\DeleteNetworkConnectorTrait;
    use GetNetworkConnector\GetNetworkConnectorTrait;
    use ListNetworkConnectors\ListNetworkConnectorsTrait;
    use UpdateNetworkConnector\UpdateNetworkConnectorTrait;
}
